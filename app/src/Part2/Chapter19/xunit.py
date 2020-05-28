class TestCase:
    def __init__(self, name):
        # Pluggable Selector パターン
        #  why: インスタンス毎に異なる振る舞いをさせる
        #  how: リフレクションで動的にメソッドの起動を行う
        self.name = name
    def setUp(self):
        pass
    def run(self):
        self.setUp()
        method = getattr(self, self.name) # Pluggable Selector パターン
        method() # Pluggable Selector パターン

# 「テストが走ったかどうかを答えるテスト」のテスト対象クラス
class WasRun(TestCase): # TestCaseクラスを継承
    def setUp(self):
        self.wasRun = None # Python では None が null に相当。評価結果が 偽 となる。
        self.wasSetUp = 1
    def testMethod(self):
        self.wasRun = 1

class TestCaseTest(TestCase): # TestCaseクラスを継承
    def setUp(self):
        # フィクスチャー
        #  why:
        #    - 複数のテストから使われる共通のオブジェクトを作る
        #  how:
        #    - テストメソッド内のローカル変数をインスタンス変数に引き上げる
        #    - オーバーライドした setUP メソッドの中で初期化を行う
        #  note:
        #    - 各々のテストメソッドはそれぞれ別のインスタンで動いているので、依存関係は発生しない
        self.test = WasRun("testMethod")
    def testRunning(self):
        self.test.run()
        assert(self.test.wasRun)
    def testSetUp(self):
        self.test.run()
        assert(self.test.wasSetUp)

TestCaseTest("testRunning").run()
TestCaseTest("testSetUp").run()
